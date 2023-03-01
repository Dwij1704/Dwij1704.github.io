console.log("Connected")
function redirect_Page () {
  var tID = setTimeout(function () {
      window.location.href = "about us.html";
      window.clearTimeout(tID);		// clear time out.
  }, 1500);
}
function click_keyhole(){ 
  document.getElementById("gate_click").innerHTML="<img src=\"res\\rocket.png\" id=\"keyhole_transition\" style=\"width: 7%; margin-left: -34px; margin-top: 5px;\"><style>.main_hero{margin: -15px;height: 900px;width: 1362px;background-color: black;background-size: cover;}#keyhole_transition{    animation: pullout 1s 0.2s 1;} @keyframes pullout {0%{}50%{margin: -25%;width: 20%;}100%{margin-top: -250%; margin-left: 80%;width: 30%;}}</style>"
  setInterval(() => {
    document.getElementById("ok1").innerHTML="<style>.main_hero{margin: -15px; height: 900px;width: 1362px;background: black;background-size: cover;}</style>"		// clear time out.
  
  }, 1000);
  redirect_Page()  
}