<style>
    
	@font-face {
		font-family: "bahijTiter";
		src: url('Bahij Badr-Bold.ttf');
	}
    .form{
        
        width:60%;
        Display:flex;
        flex-direction:column;
        box-shadow:inset 0 0 5px grey;
        justify-content:flex-start;
        align-items:start;
        padding:10px;
        margin-right:20px;
        background-color:white;
        position: absolute;
        top:55%;
        left:60%;
        transform:translate(-50%,-50%);
    } 
    .form .inputs-labels{
        width:100%;
    }
    .form input{
        padding:8px 10px;
        width:90%;
        margin-bottom:10px;
        border:none;
        background:none;
        background-color:white;
        box-shadow: 0 0 2px grey;
        border-radius:5px;
        outline:none;
        
    
    }
    .form label{
        text-transform:capitalize;
        margin-top:8px;
        color:#0A1D56;
        font-size:0.8em;
    }
    @fon
    select{
        margin-bottom:10px;
        padding:5px 0;
        width:90%;
    
    }
    form .inputs-labels{
        display:flex;
        justify-content:space-between;

    }
    form #submit
    {
        width:90%;
        margin-left:3em;
    }
    form #submit:hover
    {
       
      background:#492EF7;
    }
    input[type="file"]{
        background:none;
        box-shadow:none;
        padding:10px 0;
    }
    textarea{
        width:90%;
    }
    img{
        width:60x;
        height:60px;
        border-radius:50%;
    }
    td{
        text-align:center;
    }
    #image{
        display:none;
    }
    #image-label{
        padding:10px 15px;
        background-color:#f1f1f1;
        color:#333;
        border:1px solid #ccc;
        border-radius:4px;
        cursor: pointer;
    }
    #image-label:hover{
        background-color:#e0e0e0;
    }
   
        /* Style the container or label */
        
      
    #file-upload{
        margin-left:2em;
        margin-top:-1em;
    }
        #back-button{
            width:100px;
            /* background:#8bc9a6; */
            /* position: absolute; */
            background:#0A1D56;
            left:20%;
            top:30%;
            padding:5px 10px;
            /* transform:translate(-50%,-505); */
            color:white;
            text-align:center;
            z-index: 1;
            border-radius: 5px;
            height: 30px;
        }
    #back-button:hover{
        background:#492E87;
    }
    
    iframe{
        /* overflow: hidden; */
        background-size:cover;
        width:50px;
        height:50px;
    }
    iframe:hover{
        
        
    }
    form{
        position: relative;
    }
    .alert{
        width:100%;
        text-align:center;
        margin-bottom:5px;
        color:#0A1D56;
        text-transform:capitalize;
    }
   
    
#gender-container,#file-container
{
    display:flex:justify-content:
        flex-start;width:12em;
        /* background:red; */
}
#gender-container #spans{
    display:flex;
    margin-left:1em;
    /* border:1px solid gray; */
}
#gender-container #spans .radio-buttons input{

    margin-bottom:1em;
    margin-top:-1em;
}
#gender-container #spans .radio-buttons span{
    display:inline-block;
    margin-left:20px;
}
#gender-container #spans input{
    box-shadow:none;
}
form .error{
    color:red;
    text-align:center;
    width:100%;
    margin-top:-7px;
    margin-bottom:2px;
    font-size:0.8em;

}

#selected{
    background:blue;
}
#alert{
      
      width:60%;
      display:flex;
      justify-content:space-between;
      align-items:center;
      
  }
  #alert .alert{
    color:red;
    
  }
  #profile-image{
    position: absolute;
    left: 50%;
    top: 20%;
    width: 10em;
    height: 10em;
  }
  #profile-image img{
    
  }
</style>