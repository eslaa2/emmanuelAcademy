@extends('layouts.header')
@section('content')
           
<div class="container">
    <div class="row justify-content-center">
         <div class="col-md-8">
             <div class="card">
                <div class="card-header">
                    <div class="card-title"> Create new </div>
                </div>

                <div class="card-body">
        <form id="post" method="post" action="" >
          
            <input type="text" name="" value="">
                    <div class="form-group row">
                        <label for="Name" class="col-sm-2 control-label">Topic</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="title" placeholder="title"
                                   value="">
                        </div>
                        <span class="text-danger"></span>
                   </div>
               <div class="form-group row">
                    <label for="Name" class="col-sm-2 control-label">Class</label>
                        <div class="col-md-8">
                            <select name="class" id="" class="form-control" >
                                <option value="">Select Class</option>
                                
                            </select>

                        </div>
                         <span class="text-danger"></span>
                   </div>

                   <div class="form-group row">
                    <label for="Name" class="col-sm-2 control-label">Subject</label>
                        <div class="col-md-8">
                            <select name="" id="" class="form-control" >
                                <option value="">Select Subject</option>
                                
                            </select>

                        </div>
                         <span class="text-danger"></span>
                   </div>
                   
                    <div class="form-group row">
                        <label for="" class="col-sm-2 control-label">Body</label>
                        <textarea name="body" class="form-control"  rows="4" cols="50" placeholder=""></textarea>
                        <span class="text-danger"></span>
                    </div>
                    <div class="form-group row">
                        <label for="Name" class="col-sm-2 control-label">Image</label>
                        <div class="col-md-4">
                            <input type="file" class="thumbnail" name="image" placeholder="name" value="">
                        </div>
                        <span class="text-danger"></span>
                    </div> 
              <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="" class="btn btn-default pull-right">Cancel</a>
                </div>
             </div>
            </form>
                </div>
                </div>
@endsection