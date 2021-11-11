<?php

namespace App\Controllers;

use App\Models\Products;


class ProductController extends BaseController
{

    public function index()
    {
        //$data['pageTitle']='Products';
        $product= new Products();
        $data['products']=$product->findAll();
        return view('products/index',$data);
    }
    public function create()
    {
        $data['pageTitle']='Add Product';
        return view('products/create',$data);
    }
    public function store(){
        $product= new Products();
        $file=$this->request->getFile('image');
        if($file->isValid() && ! $file->hasMoved()){
            $newName=$file->getRandomName();
            $file->move('uploads/',$newName);
        }

        $data=[
            'name'=>$this->request->getPost('txtname'),
            'description'=>$this->request->getPost('txtdescription'),
            'price'=>$this->request->getPost('txtprice'),
            'img'=>$newName,
        ];
        $product->save($data);
        return redirect()->to('products')->with('status','Product Data saved..!');
    }

    public function edit($id){
        $product= new Products();
        $data['product']=$product->find($id);
        return view('products/edit',$data);
    }
    public function update($id)
    {
         $product= new Products();
         $prod_item=$product->find($id);
         $old_img_name=$prod_item['img'];
         
         $file=$this->request->getFile('image');
         if($file->isValid() && !$file->hasMoved())
         {
           
                if(file_exists("uploads/".$old_img_name))
                {
                    unlink("uploads/".$old_img_name);
                }
                $FilenewName=$file->getRandomName();
                $file->move('uploads/',$FilenewName);
         }
         else
         {
            $FilenewName=$old_img_name;
         }
             $data=[
                'name'=>$this->request->getPost('txtname'),
                'description'=>$this->request->getPost('txtdescription'),
                'price'=>$this->request->getPost('txtprice'),
                'img'=>$FilenewName,
            ];
            $product->update($id,$data);
            return redirect()->to('/products')->with('status','Product Data Updated..!');
         
    }
    public function delete($id){
        $product= new Products();
        $data=$product->find($id);
        $imagefile=$data['img'];
        if(file_exists("uploads/".$imagefile))
        {
            unlink("uploads/".$imagefile);
        }
        $product->delete($id);
         return redirect()->to('/products')->with('status','Product has been delete..!');

    }
}
