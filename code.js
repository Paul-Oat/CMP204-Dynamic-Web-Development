//cookie 
if (localStorage.getItem('cookieAprove') != "ok") {
    $('.cookie-approve').fadeIn();
  } else {
    $('.cookie-approve').hide(); 
  };

$('.ok-btn').click(function() {
    $('.cookie-approve').fadeOut();
    localStorage.setItem('cookieAprove',"ok");
  });

//album  onclicks
function albLoad() {
    location.href = 'Albums.html';
};

function abtLoad() {
    location.href = 'About.html';
};

function fzLoad() {
    location.href = 'php/login.php';
};

function chatMsg() {
    location.href = 'chat.php';
};
  
function accLoad() {
    location.href = 'Account.php'
}
function chanLoad() {
    location.href = 'Change.php'
}
window.onload = function() {
    breakup();
};

//DOm js events
//time since breakup 
function breakup() {
    const d = new Date();
    let day  = d.getDate();
    let month = d.getMonth();
    let yr = d.getFullYear();

     var curr = new Date(yr,month,day);
     var previous = new Date(2011, 1, 2);

    // alert(curr-previous);
    var timedf = (curr - previous);

    //convert to days 
    timedf = timedf/1000 ;
    timedf = timedf/60;
    timedf = timedf/60;
    timedf = timedf/24;

    var timeDisplay = document.getElementById("time");
    timeDisplay.innerHTML = timedf + " days ago";
};

//more info

var vis = "L"; 
document.getElementById("writeBtn").onclick = function() {

    if(vis == "L"){
    document.getElementById("moreinfo").innerHTML = "The White Stripes are an American rock band consisting of Jack and Meg White. <br> They signed their first record label in 1999. They are best known for the Rock <br> song Seven Nation Army among other hits. The band broke up in 2011 however still<br> play the occasional gig"
    document.getElementById("writeBtn").innerText= "Show Less";
    vis = "M";
    } else if (vis == "M") {
        document.getElementById("moreinfo").innerHTML = "";
        document.getElementById("writeBtn").innerText= "Show More";
        vis = "L";
    }
};
