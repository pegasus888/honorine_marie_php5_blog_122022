<?php

//add new
if($action == 'add')
{
    if(!empty($_POST))
    {
      //validate
        $errors = [];

        if(empty($_POST['comment']))
        {
            $errors['comment'] = "A comment is required";
        }else
        if(!preg_match("/^[a-zA-Z0-9 \-\_\&]+$/", $_POST['comment']))
        {
            $errors['comment'] = "Error message";
        }

        $slug = str_to_url($_POST['comment']);

        $query = "select id from comments where slug = :slug limit 1";
        $slug_row = query($query, ['slug'=>$slug]);

        if($slug_row)
        {
            $slug .= rand(1000,9999);
        }

        if(empty($errors))
        {
            //save to database
            $data = [];
            $data['comment'] = $_POST['comment'];
            $data['title'] = $_POST['title'];
            $data['content'] = $_POST['content'];
            $data['slug']     = $slug;
            $data['disabled'] = $_POST['disabled'];

            $query = "insert into comments (comment,title,content,slug,disabled) values (:comment,:title,:content,:slug,:disabled)";
            query($query, $data);

            redirect('admin/comments');

        }
        }
    }else
    if($action == 'edit')
    {

        $query = "select * from comments where id = :id limit 1";
        $row = query_row($query, ['id'=>$id]);

        if(!empty($_POST))
        {

        if($row)
        {

            //validate
            $errors = [];

            if(empty($_POST['comment']))
            {
            $errors['comment'] = "A comment is required";
            }else
            if(!preg_match("/^[a-zA-Z0-9 \-\_\&]+$/", $_POST['comment']))
            {
            $errors['comment'] = "Error message";
            }

            if(empty($errors))
            {
            //save to database
            $data = [];
            $data['comment'] = $_POST['comment'];
            $data['disabled'] = $_POST['disabled'];
            $data['id'] = $id;

            $query = "update comments set comment = :comment, disabled = :disabled where id = :id limit 1";

            query($query, $data);
            redirect('admin/comments');

            }
        }
        }
    }else
    if($action == 'delete')
    {

        $query = "select * from comments where id = :id limit 1";
        $row = query_row($query, ['id'=>$id]);

        if($_SERVER['REQUEST_METHOD'] == "POST")
        {

        if($row)
        {

            //validate
            $errors = [];

            if(empty($errors))
            {
            //delete from database
            $data = [];
            $data['id']       = $id;

            $query = "delete from comments where id = :id limit 1";
            query($query, $data);

            redirect('admin/comments');

            }
        }
        }
    }