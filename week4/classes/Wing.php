

    <?php 
  require_once(__DIR__ . '/PaymentMethod.php');
  class Wing extends PaymentMethod{
    protected $item;
    protected $quantity;
    protected $price;

    public function __construct( $item, $quantity,$price)
    {
        $this->item = $item;
        $this->quantity = $quantity;
        $this->price = $price;
    }
  
    public function getTotalSale()
    {
        return ($this->price * $this->quantity);
    }
    public function getItem()
    {
        return $this->item;
    }

}
  
    ?>

