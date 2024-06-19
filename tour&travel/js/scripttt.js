

document.addEventListener('DOMContentLoaded', function() {
    
    var userName = "[User's Name]";
    document.getElementById('user-greeting').textContent = 'Hello User';

    
    var chatbotIcon = document.getElementById('chatbot-icon');
    var chatbotWindow = document.getElementById('chatbot-window');
    var closeChatBtn = document.getElementById('close-chat');

    chatbotIcon.addEventListener('click', function() {
        chatbotWindow.style.display = 'block';
    });

    closeChatBtn.addEventListener('click', function() {
        chatbotWindow.style.display = 'none';
    });


    var sendBtn = document.getElementById('send-btn');
    var userInput = document.getElementById('user-input');
    var chatBody = document.getElementById('chat-body');

    sendBtn.addEventListener('click', function() {
        var message = userInput.value.trim();
        if (message !== '') {
            appendMessage('user', message);
            userInput.value = '';
            
            setTimeout(function() {
                appendMessage('bot', 'This is a dummy bot response.');
            }, 500);
        }
    });

    
    function appendMessage(sender, message) {
        var messageElement = document.createElement('div');
        messageElement.classList.add('message-' + sender);
        messageElement.textContent = message;
        chatBody.appendChild(messageElement);
        chatBody.scrollTop = chatBody.scrollHeight;
    }
});
