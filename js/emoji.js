
var allemo = '❤️✋✍️✌️☝✊⌚⌨️☎️⏱⏲⏰⚖️⚙️⚔️⚱️⚗️⌛✉️✒️✂️✏️⏳';
var emoarr = allemo.split('');
var stable = $('#stable');
var mainComment = $('#mainComment');
var stable2 = $('#stable2');
var replyComment = $('#replyComment');
var stablediv = $('#stablediv');
var stablediv2 = $('#stablediv2');
for (var x in emoarr) {
  stable.html (stable.html () + "<span style='cursor:pointer;' id='emoji' data-id='"+x+"'>"+emoarr[x]+"</span>");
}
$(document).on('click', '#emoji', function () {
  mainComment.val(mainComment.val() + emoarr[$(this).attr('data-id')]);
  mainComment.focus();
}); 

for (var x in emoarr) {
  stable2.html (stable2.html () + "<span style='cursor:pointer' id='emoji2' data-id='"+x+"'>"+emoarr[x]+"</span>");
}
$(document).on('click', '#emoji2', function () {
  replyComment.val(replyComment.val() + emoarr[$(this).attr('data-id')]);
  replyComment.focus();
}); 

$(document).on('click', '#sm' , function(){
  if(stablediv.css('display') == 'none') {
    stablediv.show();
  } else{
      stablediv.hide ();
    }
}); 
      
$(document).on('click', '#sm2' , function(){
  if(stablediv2.css('display') == 'none') {
    stablediv2.show();
  } else{
    stablediv2.hide ();
  }
});   