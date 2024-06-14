document.addEventListener("DOMContentLoaded", function(e) { 
    const slider = document.querySelector('.slider');
    let Modal = false;
    let hiddenComponent=null;
    function activate(e) {
      if(e.target.matches('.slider-next'))
      {
        if(Modal)
        {
          hiddenComponent.setAttribute("class","confineMovieInfo");
          let hidden = document.querySelectorAll('.hideItem');
          console.log(hidden);
          if(hidden.length>0)
          {
            for(let i =0; i< hidden.length; i++)
            {
              hidden.item(i).setAttribute('class','item'); 
            }                                
          }
          Modal=false;
        } 
        let items = document.querySelectorAll('.item');
        slider.append(items[0])
      }
      if(e.target.matches('.slider-prev'))
      {
        if(Modal)
          {
            hiddenComponent.setAttribute("class","confineMovieInfo");
            let hidden = document.querySelectorAll('.hideItem');
            if(hidden.length>0)
            {
              for(let i =0; i< hidden.length; i++)
              {
                hidden.item(i).setAttribute('class','item'); 
              }                                
            }
            Modal=false;
          }
          let items = document.querySelectorAll('.item');
          slider.prepend(items[items.length-1]);
      }           
    }
    
    document.addEventListener('click',activate,false);    
    const modals = document.querySelectorAll('.showModal')
    modals.forEach((button) => 
    {
        button.addEventListener('click', (e) =>
        {
          console.log("target:",e.target);
          let video = e.target.parentElement.parentElement.parentElement.querySelector('.videoIntegration');
          let itemTarget =  e.target.parentElement.parentElement.parentElement.parentElement;
          let buttonComponent = e.target.parentElement.parentElement;
          const items = document.querySelectorAll('.item');
          for(let item of items){
            if(item!=itemTarget)
              {
                item.setAttribute("class", "hideItem");
              }
          }
          console.log(video);
          const src = video.attributes.getNamedItem("src");
          let path = src.value.split('?');
          let params = path[1].split('&');
          console.log(params);
          console.log(path);
          Modal=true;
          buttonComponent.setAttribute("class", "hideMovieInfo");
          hiddenComponent=buttonComponent;
          console.log(buttonComponent);
        });
    });
})

function is_visible(e) {
  return e.offsetWidth > 0 || e.offsetHeight > 0;
}
