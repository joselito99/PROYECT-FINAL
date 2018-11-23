<?php
class Cart {
    protected $cart_contenido = array();

    public function __construct(){
        // get the shopping cart array from the session
        $this->cart_contenido = !empty($_SESSION['cart_contenido'])?$_SESSION['cart_contenido']:NULL;
		if ($this->cart_contenido === NULL){
			// set some base values
			$this->cart_contenido = array('venta_total' => 0, 'total_vent' => 0);
		}
    }

    /**
  	 * Cart Contents: Returns the entire cart array
  	 * @param	bool
  	 * @return	array
  	 */
	public function contenido(){
		// rearrange the newest first
		$cart = array_reverse($this->cart_contenido);

		// remove these so they don't create a problem when ºshowing the cart table
		unset($cart['total_vent']);
		unset($cart['venta_total']);

		return $cart;
	}

  /**
	 * Get cart item: Returns a specific cart item details
	 * @param	string	$row_id
	 * @return	array
	 */
	public function get_item($row_id){
		return (in_array($row_id, array('total_vent', 'venta_total'), TRUE) OR ! isset($this->cart_contenido[$row_id]))
			? FALSE
			: $this->cart_contenido[$row_id];
	}

    /**º
	 * Total Items: Returns the total item count
	 * @return	int
	 */
	public function total_vent(){
		return $this->cart_contenido['total_vent'];
	}

  /**º
	 * Total Items: Returns the total item count
	 * @return	int
	 */
	public function total(){
		return $this->cart_contenido['venta_total'];
	}

   /**
	 * Insert items into the cart and save it to the session
	 * @param	array
	 * @return	bool
	 */
	public function insert($item = array()){
		if(!is_array($item) OR count($item) === 0){
			return FALSE;
		}else{
            if(!isset($item['id'], $item['Nombre_plato'], $item['Valor_plato'], $item['Cantidad'])){
                return FALSE;
            }else{
                /*
                 * Insert Item
                 */
                // prep the quantity
                $item['Cantidad'] = (float) $item['Cantidad'];
                if($item['Cantidad'] == 0){
                    return FALSE;
                }
                // prep the price
                $item['Valor_plato'] = (float) $item['Valor_plato'];
                // create a unique identifier for the item being inserted into the cart
                $rowid = md5($item['id']);
                // get quantity if it's already there and add it on
                $old_Cantidad = isset($this->cart_contenido[$rowid]['Cantidad']) ? (int) $this->cart_contenido[$rowid]['Cantidad'] : 0;
                // re-create the entry with unique identifier and updated quantity
                $item['rowid'] = $rowid;
                $item['Cantidad'] += $old_Cantidad;
                $this->cart_contenido[$rowid] = $item;

                // save Cart Item
                if($this->save_cart()){
                    return isset($rowid) ? $rowid : TRUE;
                }else{
                    return FALSE;
                }
            }
        }
	}

    /**
	 * Update the cart
	 * @param	array
	 * @return	bool
	 */
	public function update($item = array()){
		if (!is_array($item) OR count($item) === 0){
			return FALSE;
		}else{
			if (!isset($item['rowid'], $this->cart_contenido[$item['rowid']])){
				return FALSE;
			}else{
				// prep the quantity
				if(isset($item['Cantidad'])){
					$item['Cantidad'] = (float) $item['Cantidad'];
					// remove the item from the cart, if quantity is zero
					if ($item['Cantidad'] == 0){
						unset($this->cart_contenido[$item['rowid']]);
						return TRUE;
					}
				}

				// find updatable keys
				$keys = array_intersect(array_keys($this->cart_contenido[$item['rowid']]), array_keys($item));
				// prep the price
				if(isset($item['Valor_plato'])){
					$item['Valor_plato'] = (float) $item['Valor_plato'];
				}
				// product id & name shouldn't be changed
				foreach(array_diff($keys, array('id', 'Nombre_plato')) as $key){
					$this->cart_contenido[$item['rowid']][$key] = $item[$key];
				}
				// save cart data
				$this->save_cart();
				return TRUE;
			}
		}
	}

    /**
	 * Save the cart array to the session
	 * @return	bool
	 */
	protected function save_cart(){
		$this->cart_contenido['total_vent'] = $this->cart_contenido['venta_total'] = 0;
		foreach ($this->cart_contenido as $key => $val){
			// make sure the array contains the proper indexes
			if(!is_array($val) OR !isset($val['Valor_plato'], $val['Cantidad'])){
				continue;
			}

			$this->cart_contenido['venta_total'] += ($val['Valor_plato'] * $val['Cantidad']);
			$this->cart_contenido['total_vent'] += $val['Cantidad'];
			$this->cart_contenido[$key]['subtotal'] = ($this->cart_contenido[$key]['Valor_plato'] * $this->cart_contenido[$key]['Cantidad']);
		}

		// if cart empty, delete it from the session
		if(count($this->cart_contenido) <= 2){
			unset($_SESSION['cart_contenido']);
			return FALSE;
		}else{
			$_SESSION['cart_contenido'] = $this->cart_contenido;
			return TRUE;
		}
    }

    /**
	 * Remove Item: Removes an item from the cart
	 * @param	int
	 * @return	bool
	 */
	 public function remove($row_id){
		// unset & save
		unset($this->cart_contenido[$row_id]);
		$this->save_cart();
		return TRUE;
	 }

    /**
	 * Destroy the cart: Empties the cart and destroy the session
	 * @return	void
	 */
	public function destroy(){
		$this->cart_contenido = array('venta_total' => 0, 'total_vent' => 0);
		unset($_SESSION['cart_contenido']);
	}
}
