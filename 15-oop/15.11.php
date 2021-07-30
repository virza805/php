<?php  
class Sodium {
    static function addForm($id): Sodium{
        return new Sodium();
    }
    function addColum($columnSize): Sodium{}

    function addFields(FieldInterface ...$fields): Sodium{}
}

Class FieldFactory {
    static function createTextField(): FieldInterface{}
    static function createRadio(): FieldInterface{}
    static function createPasswordField(): FieldInterface{}
}

class TextField extends AbstractField {

}
class Radio extends AbstractField{

}
class GoogleMap{

}

class AbstractField implements FieldInterface{
    static function create($id):FieldInterface{
        function setId(): FieldInterface{}
        function setLabel(): FieldInterface{}
        function setDefault(): FieldInterface{}
        function setValue(): FieldInterface{}
    }
}

interface FieldInterface {
    static function create($id):FieldInterface;

    function setId(): FieldInterface;
    function setLabel(): FieldInterface;
    function setDefault(): FieldInterface;
    function setValue(): FieldInterface;
}
Sodium::addForm("myform")->addColumn()->addFields(
    [
        FieldFactory::createTextField()->setId()->setDefault()->setValue(),
        FieldFactory::createRadio()->setLabel(),
        FieldFactory::createPasswordField()->setValue()->setId()->setDefault()
    ]
);

Sodium::addForm("myform")->addColum()->addFields(
    FieldFactory::createTextField()->setId()->setDefault()->setValue(),
    FieldFactory::createRadio()->setLabel(),
);

Sodium::addForm("form")->addFields(
    TextField::create('id')->setValue()->setLabel(),
    GoogleMap::create('mapid')->setLabel()->setDefault()
    
);




