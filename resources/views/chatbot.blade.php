<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Chatbot') }}
    </h2>
  </x-slot>
</x-app-layout>

<script src="http://localhost:3000/assets/modules/channel-web/inject.js"></script>
<script> window.botpressWebChat.init({
  host: 'http://localhost:3000',
  botId: 'tamalou2', //The ID for your bot
  botName: 'Tamalou', // Name of your bot
  botAvatarUrl: null, // Default avatar URL of the image (e.g., 'https://avatars3.githubusercontent.com/u/1315508?v=4&s=400' )
  botConvoDescription: "Bot d'automédication",
  backgroundColor: '#ffffff', // Color of the background
  textColorOnBackground: '#666666', // Color of the text on the background
  foregroundColor: '#0176ff', // Element background color (header, composer, button..)
  textColorOnForeground: '#ffffff', // Element text color (header, composer, button..)
  showConversationsButton: true, // Whether or not to show the conversations button
  showUserName: true, // Whether or not to show the user's name
  showUserAvatar: false, // Whether or not to show the user's avatar
  enableTranscriptDownload: false, // Whether or not to show the transcript download button
  enableArrowNavigation: true, //Whether or to to support arrow navigation (e.g scroll conversation, focus on buttons)
  // externalAuthToken: 'my jwt token', //Defines a token that is sent with each messages to Botpress
  // userId: null, // Allows you to override the default user id. Make sure it is not possible to guess it!
  enableReset: false, // Whether or not reset button will be shown to the user
  extraStylesheet: '/assets/modules/channel-web/examples/my-theme.css', // Define a custom style sheet to override Botpress styling
  showPoweredBy: false,
  recentConversationLifetime: "5 seconds"
})

window.addEventListener('message', message => {
  if (message.data.userId) {
    console.log(`The User ID is ` + message.data.userId)
  }
})
</script>
