// #1. CHAT BOX
$(function () {
  $('.floated-chat-btn, .floated-chat-w .chat-close').on('click', function () {
    $('.floated-chat-w').toggleClass('active');
    return false;
  });

  $('.message-input').on('keypress', function (e) {
    if (e.which == 13) {
      $('.chat-messages').append('<div class="message self"><div class="message-content">' + $(this).val() + '</div></div>');
      $(this).val('');
      var $messages_w = $('.floated-chat-w .chat-messages');
      $messages_w.scrollTop($messages_w.prop("scrollHeight"));
      $messages_w.perfectScrollbar('update');
      return false;
    }
  });

  $('.floated-chat-w .chat-messages').perfectScrollbar();
});

// #14. FULL CHAT APP

  function add_full_chat_message($input) {
    $('.chat-content').append('<div class="chat-message self"><div class="chat-message-content-w"><div class="chat-message-content">' + $input.val() + '</div></div><div class="chat-message-date">1:23pm</div><div class="chat-message-avatar"><img alt="" src="assets/images/avatar1.jpg"></div></div>');
    $input.val('');
    var $messages_w = $('.chat-content-w');
    $messages_w.scrollTop($messages_w.prop("scrollHeight"));
    $messages_w.perfectScrollbar('update');
  }

  $('.chat-content-w').perfectScrollbar({ wheelPropagation: true });

  $('.chat-btn a').on('click', function () {
    add_full_chat_message($('.chat-input input'));
    return false;
  });
  $('.chat-input input').on('keypress', function (e) {
    if (e.which == 13) {
      add_full_chat_message($(this));
      return false;
    }
  });

