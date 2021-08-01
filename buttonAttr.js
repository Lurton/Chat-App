function downMenu()
    {
        var x = document.getElementById("dropDown");

        if(x.className === "nav2")
        {
            x.className += " responsive";
            // change nav to nav.responsive
        }
        else{
            x.className = "nav2";
        }
    }
