 <!-- banner start -->
 <section class="banner text-gray-600 body-font py-10" style="background: rgb(161,54,130);
background: linear-gradient(344deg, rgba(161,54,130,1) 0%, rgba(88,48,179,1) 61%);">
   <div class="container max-w-5xl px-5 py-24 mx-auto">
     <div class="flex flex-col text-center w-full mb-12">
       <span class="mt-6 pb-3 text-3xl font-black leading-tight text-black sm:text-4xl lg:text-6xl" style="color: #ffffff">Turn Your ideas into project into real life project</span>
       <p style="color: #fff" class="lg:w-2/3 mx-auto leading-relaxed text-base">where innovation meets execution, and bugs are just unexpected features waiting to be discovered!</p>
     </div>

     <form name="search" method="post" action="projects" class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:space-x-4 sm:space-y-0 space-y-4 sm:px-0 items-end">
       <div class="relative flex-grow w-full">
         <select style="height:42px" id="technology" name="technology" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-transparent focus:ring-2 focus:ring-indigo-200 text-base outline-none text-white py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
           <option style="color: #000" value="">Select Technology</option>
           <option style="color: #000" value="Computer Science">Computer Science</option>
         </select>
       </div>
       <div class="relative flex-grow w-full">
         <input type="search" id="search" name="search" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-transparent focus:ring-2 focus:ring-indigo-200 text-base outline-none text-white py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
       </div>
       <button type="submit" style="background: transparent;" class="text-white border-2 border-white py-1 px-8 focus:outline-none rounded text-lg">Search</button>
     </form>

   </div>
 </section>