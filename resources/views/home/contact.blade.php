<x-app-layout>

    <div class="flex min-h-screen items-center justify-start bg-slate-800">
        <div class="mx-auto w-full max-w-4xl">
          <div class="grid grid-cols-2 gap-4">
            <div class="col-span-1 mt-52">
              <h1 class="text-4xl font-medium mb-4">Contate-nos</h1>
              <p>Envie-nos um e-mail para help@utopy.com ou envie-nos uma mensagem aqui:</p>
            </div>
            <div class="col-span-1 ">
              <div class="bg-white p-8 rounded-lg">
                <form action="https://api.web3forms.com/submit" class="space-y-4">
                  <!-- This is a working contact form.
                       Get your free access key from: https://web3forms.com/  -->

                  <input type="hidden" name="access_key" value="YOUR_ACCESS_KEY_HERE" />

                  <div>
                    <h1 class="text-black text-4xl font-medium mb-4">Envie-nos uma mensagem</h1>
                    <label for="name" class="block text-sm font-medium text-gray-700">Seu nome</label>
                    <input type="text" name="name" id="name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md text-black" placeholder="Digite seu nome" required>
                  </div>

                  <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Seu e-mail</label>
                    <input type="email" name="email" id="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md text-black" placeholder="Digite seu e-mail" required>
                  </div>

                  <div>
                    <label for="message" class="block text-sm font-medium text-gray-700">Sua mensagem</label>
                    <textarea name="message" id="message" rows="8" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md text-black" placeholder="Digite sua mensagem" required></textarea>
                  </div>

                  <div class="flex justify-end">
                    <button type="submit" class="px-4 py-2 bg-main-500 text-white rounded-md hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Enviar mensagem</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>



</x-app-layout>
