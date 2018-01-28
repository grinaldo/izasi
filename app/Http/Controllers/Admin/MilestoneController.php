<?php

namespace App\Http\Controllers\Admin;

use App\Model\Milestone as Model;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Yajra\Datatables\Datatables;

class MilestoneController extends ResourceController
{

    /**
     * Form Rules
     * @var array
     */
    protected $rules = [
        'image' => '',
        'year' => 'required|string',
        'name' => 'required|string',
        'description' => '',
        'published' => '',
    ];

    public function __construct(Model $model)
    {
        parent::__construct($model);
    }

    protected function beforeValidate()
    {
        parent::beforeValidate();
        // Put your form requirement here
        // e.g. $this->form->setModelId($this->model->getKey());
    }

    protected function formRules()
    {
        parent::formRules();
    }

    public function formData()
    {
        parent::formData();
    }

    protected function doSave() 
    {
        parent::doSave();
    }

}
