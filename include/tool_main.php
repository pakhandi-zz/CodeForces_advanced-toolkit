<style>
#linker
{
    padding: 60px;
    padding-bottom: 60px;
    padding-top: 60px;
    border-radius: 0;
    font-size: 50px;
    margin-top: 50px;
    margin-left: 50px;
    border-radius: 3px 3px 0px 0px;
}

#linker:hover
{
    color: blue; 
}

#overlay
{
    background-color: grey;
    color: black;
    position: absolute;
    opacity: 0;
    margin-top: 50px;
    margin-left: 50px;
    height: 188px;
    width: 598px;
    top: 0px;
    border-radius: 3px 3px 0px 0px;
}

#overlay:hover
{
  opacity: 0.5;
}

#overlay:hover + #linker
{
    color: grey;
}

#gly_goto
{
    height: 100px;
    width: 100px;
    margin: 80px 280px;
    font-size: 50px;
}

</style>
</head>

<body>
  <div class="back_body" id="back_body">

    <a href="CF/toolkit_lists">
      <div id="overlay">
          
          <span class="glyphicon glyphicon glyphicon-share-alt" aria-hidden="true" id="gly_goto"></span>

      </div>
      <button type="button" id="linker" class="btn btn-lg btn-success">

          <b>CodeForces ToolKit</b>
      </button>
      
    </a> 
  </div>
</body>
</html>