<?php
// trait
trait NumberSeriesOne {
    private function numberSeriesA(){
        echo "Number Series A\n";
    }

    function numberSeriesB(){
        $this->numberSeriesA();
        echo "number Series B\n";
    }
}
trait NumberSeriesTwo {
    use NumberSeriesOne;
    private function numberSeriesC(){
        echo "Number Series C\n";
    }

    function numberSeriesD(){
        $this->numberSeriesA();
        echo "number Series D\n";
    }
}

class numberSeries{
    use NumberSeriesTwo;
}

$ns = new numberSeries();
// $ns->numberSeriesB();
$ns->numberSeriesD();

echo "=======\n# Trait Extends \n===== \n";

// trait
trait NumberSeriesOnes {
    function numberSerieA(){
        echo "Number Series A\n";
       // parent::numberSerieA();
    }

    function numberSerieB(){
        $this->numberSerieA();
        echo "number Series B\n";
    }
}

class SomeClass{
    function numberSerieA(){
        echo "Printing + Printing Number Series A\n";
    }
}
class numberSerie extends SomeClass{
    use NumberSeriesOnes;
}
$nas = new numberSerie();
// $ns->numberSeriesB();
$nas->numberSerieA();
