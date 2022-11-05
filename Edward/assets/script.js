const navToggle = document.querySelector('.nav-toggle');//this turns the nav-toggle class into a js object

const navLinks = document.querySelectorAll('.nav--link');//this puts all the nav links into one variable

//the below is code to interact with the js object

navToggle.addEventListener('click', () =>{
    document.body.classList.toggle('nav-open');
})


//the below to act on navLinks

navLinks.forEach(link =>
    {
        link.addEventListener('click', () => {
            document.body.classList.remove('nav-open');
        })
    })


	$(document).ready(function(){
		$('.carousel').carousel()
	  });

   //the below to handle contact form stuff
   