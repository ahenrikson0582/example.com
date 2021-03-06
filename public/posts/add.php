<?php
require '../../core/functions.php';
require '../../config/keys.php';
require '../../core/db_connect.php';
//Build the page metadata
$meta = [];
$meta['description'] = "Post Add ahenrikson0582";
$meta['keywords'] = "ahenrikson0582 Post Add";

$message=null;

$args = [
    'title'=>FILTER_SANITIZE_STRING, //strips HMTL
    'meta_description'=>FILTER_SANITIZE_STRING, //strips HMTL
    'meta_keywords'=>FILTER_SANITIZE_STRING, //strips HMTL
    'body'=>FILTER_UNSAFE_RAW  //NULL FILTER
];

$input = filter_input_array(INPUT_POST, $args);

if(!empty($input)){

    //Strip white space, begining and end
    $input = array_map('trim', $input);

    //Allow only whitelisted HTML
    $input['body'] = cleanHTML($input['body']);

    //Create the slug
    $slug = slug($input['title']);

    //Sanitized insert
    $sql = 'INSERT INTO posts SET id=uuid(), title=?, slug=?, body=?';

    if($pdo->prepare($sql)->execute([
        $input['title'],
        $slug,
        $input['body']
    ])){
       header('LOCATION:/example.com/public/posts');
    }else{
        $message = 'Something bad happened';
    }
}

$content = <<<EOT
<h1>Add a New Post</h1>
{$message}
<form method="post">
<div class="form-group">
    <label for="title">Title</label>
    <input id="title" name="title" type="text" class="form-control">
</div>
<div class="form-group">
    <label for="body">Body</label>
    <textarea id="body" name="body" rows="8" class="form-control"></textarea>
</div>
<div class="row">
    <div class="form-group col-md-6">
        <label for="meta_description">Description</label>
        <textarea id="meta_description" name="meta_description" rows="2" class="form-control"></textarea>
    </div>
    <div class="form-group col-md-6">
        <label for="meta_keywords">Keywords</label>
        <textarea id="meta_keywords" name="meta_keywords" rows="2" class="form-control"></textarea>
    </div>
</div>
<div class="form-group">
    <input type="submit" value="Submit" class="btn btn-primary">
    <a href="./" class="btn btn-success btn-lg">Cancel</a>
</div>
</form>
EOT;

include '../../core/layout.php';