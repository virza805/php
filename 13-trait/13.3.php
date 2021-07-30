<?php

trait NumberSeriesOne{
    function NumberSeriesA(){
        echo "Number Series A\n";
    }
}
trait NumberSeriesTwo{
    function NumberSeriesA(){
        echo "Number Series A++\n";
    }
}

class NumberSeries{
    use NumberSeriesOne;
    use NumberSeriesTwo{
        NumberSeriesOne::numberSeriesA as numberSeriesAA;
        NumberSeriesTwo::NumberSeriesA as NumberSeriesAAA;
    }

    function NumberSeriesA(){
        echo "Printing + Printing Number Series A\n";
    }
}

$ns = new NumberSeries();
$ns->NumberSeriesA();
// $ns->NumberSeriesAA();
// $ns->NumberSeriesAAA();

