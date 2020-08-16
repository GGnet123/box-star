<?php


namespace backend\columns;


class ToggleColumn extends \dosamigos\grid\columns\ToggleColumn
{
    public $onValue = 1;
    public $onLabel = 'Yes';
    public $offLabel = 'No';
    public $contentOptions = ['class' => 'col-md-1 text-center'];
    public $headerOptions = ['class' => 'col-md-1'];
    public $onIcon = 'glyphicon glyphicon-ok-circle btn btn-success';
    public $offIcon = 'glyphicon glyphicon-remove-circle btn btn-default';
    public $filter = [
        1 => 'Active',
        0 => 'Inactive'
    ];
}