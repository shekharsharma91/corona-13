$(document).ready(function(){$(".sponsorFlip").bind("click",function(){var e=$(this);if(e.data("flipped")){e.revertFlip();e.data("flipped",false)}else{e.flip({direction:"lr",speed:350,onBefore:function(){e.html(e.siblings(".sponsorData").html())}});e.data("flipped",true)}})})