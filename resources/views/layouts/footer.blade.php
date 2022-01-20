 {{-- <footer id="footer" class="relative bg-white">
   <div tabindex="0" aria-label="footer" class="focus:outline-none border-b border-gray-200 dark:border-gray-700"></div>
   <div class="py-12 flex flex-col justify-center items-center">
     <a class="focus:outline-none" tabindex="0" role="link" aria-label="home link" href="javascript:void(0)">
       <img class="dark:hidden" src="{{ asset('images/logo.png') }}" alt="tuk logo">
     </a>
     <p tabindex="0" class="focus:outline-none mt-6 text-xs lg:text-sm leading-none text-gray-900 dark:text-gray-50">2021
       Tamalou. Tous droits réservés.</p>
   </div>
 </footer> --}}

 <script src="http://localhost:3000/assets/modules/channel-web/inject.js"></script>
 <script>
   window.botpressWebChat.init({
     host: 'http://localhost:3000',
     botId: 'tamalou',
     botName: 'Tamalou', // Name of your bot
     botAvatarUrl: null, // Default avatar URL of the image (e.g., 'https://avatars3.githubusercontent.com/u/1315508?v=4&s=400' )
     botConvoDescription: "Bot d'automédication",
     backgroundColor: '#ffffff', // Color of the background
     textColorOnBackground: '#666666', // Color of the text on the background
     foregroundColor: '#0176ff', // Element background color (header, composer, button..)
     textColorOnForeground: '#ffffff', // Element text color (header, composer, button..)
     showConversationsButton: false,
     showUserName: true,
     showUserAvatar: true,
     enableTranscriptDownload: true,
     enableArrowNavigation: true,
     enableReset: false,
     //  extraStylesheet: '/assets/modules/channel-web/examples/my-theme.css',
     showPoweredBy: false,
     useSessionStorage: true,
   })

   window.addEventListener('message', event => {
     if (event.data.name !== "configChanged") {
       if (event.data.name === "webchatReady") {
         window.botpressWebChat.sendEvent({
           type: 'proactive-trigger',
           channel: 'web',
         });
       }
     }
   });
 </script>