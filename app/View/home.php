
<body id="butn">
  
<a href="team" >
<button class="button" ><b>View Teams</b><div></div></button>
</a>
<style>
    html {
    height: 100%;
  }
    
  a {
    display:flex;
    justify-content: center;
    align-items: center;
  }
  
  body {
    background: black;
    display: flex;
    justify-content: center;
    height: 100%;
  }
  
  .button {
    width:331px;
    display: flex;
    height: 84px;
    background: black;
    color: white;
    position:absolute;
    align-items: center;
    border: solid 1px white;
    letter-spacing: .3em;
    padding-left: 40px;
    
  }
  
  .button:hover > div {
    margin-left: 214px;
    transition: 0.5s cubic-bezier(.4,0,.2,1) ;
  }
  
  .button:hover > b {
    animation: letterroll cubic-bezier(.4,0,.2,1) 0.5s;
  }
  
  b {
    animation: backroll cubic-bezier(.4,0,.2,1) 0.5s;
  }
  
  div {
    width: 75px;
    height:1px;
    background: red;
    margin-left: 230px;
    position: absolute;
    transition: 0.5s;
    
  }
  
  
  @keyframes letterroll {
    50% {
      transform: translateY(-75%);
      opacity: 0;
    }
    50.1% {
      transform: translateY(75%);
    }
    100% {
      transform: translateY(0%);
      opacity: 1;
    }
  }
  
  @keyframes backroll {
    50% {
      transform: translateY(75%);
    }
    50.1% {
      transform:translateY(-75%);
      opacity: 0;
    }
    100% {
      transform: translateY(0%);
      opacity: 1;
    }
  }
  
  #butn {
    visibility: hidden;
  }
</style>
<script >

window.setTimeout(function() {
    document.getElementById('butn').style.visibility = 'visible';
}, 0o50);

</script>
 </body>