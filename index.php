<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Chat Dummy</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <style>
            /* * { font-family:tahoma; font-size:12px; padding:0px;margin:0px;}
            p { line-height:18px; }
            div { width:500px; margin-left:auto; margin-right:auto;} */
            #content { 
              padding:5px; 
              background:#ddd; 
              border-radius:5px;
              overflow-y: scroll;
              border:1px solid #CCC;
              margin-top:10px;
              height: 160px; 
            }

            #user { 
              padding:5px; 
              background:#ddd; 
              border-radius:5px;
              overflow-y: scroll;
              border:1px solid #CCC;
              margin-top: 10px;
              height: 160px; 
            }

            #input { 
              border-radius:2px; 
              border:1px solid #ccc;
              margin-top:10px; 
              padding:5px; 
              width:75%;
            }

            #status { 
              width:88px;
              display:block;
              float:left;
              margin-top:15px; 
            }

            #clear {
              color:red;
            }

    </style>
  </head>
  <body>
  <div class="row">
    <div id="" class="col-md-1">
    </div>

    <div id="user" class="col-md-1">
    </div>

    <div id="" class="col-md-1">
    </div>

    <div id="content" class="col-md-6">
    </div>

    <div id="cleardiv" class="col-md-2">
    <button type="button" id="clear">&times; clear chat</button>
    </div>
  </div>

  <div class="row">
    <div id="" class="col-md-1">
    </div>

    <div class="col-md-1">    
    </div>

    <div id="" class="col-md-1">
    </div>

    <div id="" class="col-md-6">
      <span id="status">Connecting...</span>
      <input type="text" id="input" disabled="disabled" />
    </div>

  </div>
    
   
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
    </script>
    <script src="index.js"></script>
  </body>
</html>