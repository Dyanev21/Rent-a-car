<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class add_carsController extends CrudController{

    public function all($entity){
        parent::all($entity); 




			$this->filter = \DataFilter::source(new \App\add_cars);
			$this->filter->add('title', 'Title', 'text');
			$this->filter->submit('search');
			$this->filter->reset('reset');
			$this->filter->build();

			$this->grid = \DataGrid::source($this->filter);
			$this->grid->add('title', 'Title');
			$this->grid->add('profile_image', 'Profile image');
			$this->grid->add('additional_image1', 'Additional Image1');
			$this->grid->add('additional_image2', 'Additional Image2');
			$this->grid->add('additional_image3', 'Additional Image3');
			$this->grid->add('additional_image4', 'Additional Image4');
			$this->grid->add('additional_image5', 'Additional Image5');
			$this->grid->add('price', 'Price');
			$this->addStylesToGrid();


                 
        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);

        $this->edit = \DataEdit::source(new \App\add_cars());

        $this->edit->label('Edit Gallery');

        $this->edit->add('title', 'Title:', 'text')->rule('required');

        $this->edit->add('description', 'Description:', 'text')->rule('required');

        $this->edit->add('profile_image', 'Profile Image:', 'file')->rule('required');

        $this->edit->add('additional_image1', 'Additional Image1:', 'file')->rule('required');

        $this->edit->add('additional_image2', 'Additional Image2:', 'file')->rule('required');

        $this->edit->add('additional_image3', 'Additional Image3:', 'file')->rule('required');

        $this->edit->add('additional_image4', 'Additional Image4:', 'file')->rule('required');

        $this->edit->add('additional_image5', 'Additional Image5:', 'file')->rule('required');

        $this->edit->add('price', 'Price', 'text')->rule('required');


        return $this->returnEditView();
    }    
}
