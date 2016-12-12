<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Profile</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            #pro1{
                 height: 5em;
                 margin:0px 200px 1px 200px;
                 background-color:blue;
                 border:1px solid green;
                 
            }#pro2{
                height:40em;
               border:1px solid black;
               margin:0px 200px 1px 200px;
               background-image: url(img/backgrounds/1.jpg)
            }
            #prophoto{height: 150px;
                      width:150px;
                      border:1px solid red;
                      margin:50px 800px 200px 450px;
                       float:left;
            }
            #iii{
                height: 150px;
                      width:150px;
            }
            .dispin2{
                display:inline;
                    
            }
            button{
                 position: relative;
    display: inline-block;
    background: #D0EEFF;
    border: 1px solid #99D3F5;
    border-radius: 4px;
    padding: 4px 12px;
    overflow: hidden;
    color: #1E88C7;
    text-decoration: none;
    text-indent: 0;
    line-height: 20px;
            }
    </style>
    </head>
    
    <body>
        <div id="pro1">        </div>
                <div id="pro2"> 
                    <div id="prophoto" class='dispin2'>
                        <img src="img/pandalogo.jpg" id='iii'>
                        <label class='dispin2'><input type='text' id='username1'>sdadweaddw</label>
                        <br>
                        
                        <button id='probtn1'>Upload</button>
                                               <button id='probtn2'>Remove</button>  
                                               <br>
                   <div class="set"> |Name: <input type="text" name="name"  /></div>
                   <br>
                   
                   <div class="set"> |Birthday: <input type="date" name="Date"  /></div>
                   <br>
                   
                   <div class="set">|About me<input type="text" name="description"/></div>
                   <br>
                      <button id='probtn1'>Submit</button>
                                               <button id='probtn2'>Edit</button>                           
            </div>
        </div>
    </body>
</html>
