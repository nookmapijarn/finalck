<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>สกร.จังหวัดอ่างทอง</title>
        <meta name="description" content="ระบบสำหรับค้นหาและตรวจสอบผู้หลักสูตรในสังกัดของ สกร.จังหวัดอ่างทอง">
        <meta name="robots" content="ตรวจสอบผู้จบหลักสูตร, ค้นหาผู้จบหลักสูตร, สกร.จังหวัดอ่างทอง">
        <link rel="icon" type="image/x-icon" href="{{asset('storage/logo-app.jpg');}}">

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        {{-- google font --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@500&display=swap" rel="stylesheet">
        
        @vite(['resources/css/app.css','resources/js/app.js'])

        <style>
            body {
                font-family: 'IBM Plex Sans Thai', sans-serif;
            }
        </style>
    </head>
    <body>
        @include('navigation')
        <div class="relative pb-4">
            <main class="px-4 mx-auto mt-10 max-w-7xl sm:mt-14">
              <div class="flex justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-20 h-20">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                </svg>                              
              </div>
              <div class="text-center"> 
                  <h1 class="font-display mt-4 text-4xl tracking-tight font-extrabold text-gray-900">
                    เพิ่มข้อมูลผู้จบหลักสูตร พุทธศักราช 2544-2537
                  </h1>
                <p class="max-w-md mx-auto mt-3 text-base text-gray-500 sm:text-sm md:mt-5 md:text-lg md:max-w-3xl">
                  สถานศึกษาในสังกัดสำนักงานส่งเสริมการเรียนรู้จังหวัดอ่างทอง
                </p>
                <p>
                    ผู้ใช้งาน : {{ Auth::user()->name }}
                </p>
                <div class="relative max-w-3xl px-4 mx-auto mt-10 sm:px-6">
                    <form action="{{ route('addfinalstudent.add') }}" method="POST" class="grid grid-cols-3 gap-4">   
                        @csrf
                        <div>
                            <label for="PRENAME" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">คำนำหน้า*</label>
                            <select id="PRENAME" name="PRENAME" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                              <option value=" ">ว่าง</option>
                              <option value="นาย">นาย</option>
                              <option value="นาง">นาง</option>
                              <option value="นางสาว">นางสาว</option>
                              <option value="เด็กชาย">เด็กชาย</option>
                              <option value="เด็กชาย">เด็กหญิง</option>
                              <option value="เด็กชาย">สามเณร</option>  
                              <option value="พระ">พระ</option>
                            </select>
                        </div>
                        <div>
                            <label for="NAME" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ชื่อ*</label>
                            <input type="text" id="NAME" name="NAME" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                        </div>
                        <div>
                            <label for="SURNAME" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">นามสกุล*</label>
                            <input type="text" id="SURNAME" name="SURNAME" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                        </div>
                        <div>
                            <label for="CARDID" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">เลขบัตรประชาชน*</label>
                            <input type="text" id="CARDID" name="CARDID" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                        </div>
                        <div>
                            <label for="ID" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">รหัสนักศึกษา(ถ้าไม่มีเลขบัตรประชาชน)</label>
                            <input type="text" id="ID" name="ID" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
                        </div>
                        <div>
                            <label for="LAVEL" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ระดับชั้นที่จบ*</label>
                            <select id="countries" name="LAVEL" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                              <option value=" " selected>ระดับ</option>
                              <option value="1">ประถม</option>
                              <option value="2">มัธยมต้น</option>
                              <option value="3">มัธยมปลาย</option>
                            </select>
                        </div>
                        <div>
                            <label for="FIN_SEM" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ภาคเรียนที่จบ*</label>
                            <select id="FIN_SEM" name="FIN_SEM" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                              <option value="">ว่าง</option>
                              <option value="1/37">1/37</option>
                              <option value="2/37">2/37</option>
                              <option value="1/38">1/38</option>
                              <option value="2/38">2/38</option>
                              <option value="1/39">1/39</option>
                              <option value="2/39">2/39</option>
                              <option value="1/40">1/40</option>
                              <option value="2/40">2/40</option>
                              <option value="1/41">1/41</option>
                              <option value="2/41">2/41</option>
                              <option value="1/42">1/42</option>
                              <option value="2/42">2/42</option>
                              <option value="1/43">1/43</option>
                              <option value="2/43">2/43</option>
                              <option value="3/43">3/43</option>
                              <option value="1/44">1/44</option>
                              <option value="2/44">2/44</option>
                              <option value="2/44">3/44</option>
                              <option value="1/45">1/45</option>
                              <option value="2/45">2/45</option>
                              <option value="1/46">1/46</option>
                              <option value="2/46">2/46</option>
                              <option value="1/47">1/47</option>
                              <option value="2/47">2/47</option>
                              <option value="1/48">1/48</option>
                              <option value="2/48">2/48</option>
                              <option value="1/49">1/49</option>
                              <option value="2/49">2/49</option>
                              <option value="1/50">1/50</option>
                              <option value="2/50">2/50</option>
                              <option value="1/51">1/51</option>
                              <option value="2/51">2/51</option>
                            </select>
                        </div>
                        <div>
                            <label for="TRNGRP" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ระเบียน-เล่มที่ (ถ้ามี)</label>
                            <input type="text" id="TRNGRP" name="TRNGRP" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                        </div>
                        <div>
                            <label for="TRNRUN" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ระเบียน-เลขที่ (ถ้ามี)</label>
                            <input type="text" id="TRNRUN" name="TRNRUN" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                        </div>
                        <div></div>
                        <button type="submit" class="text-white bg-green-400 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">บันทึก</button>
                    </form>
                </div>
              </div>
            </main>
          </div>  
    </body>
    <footer class="bg-white rounded-lg w-full">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-xs text-gray-500 sm:text-center dark:text-gray-400"><a href="#" class="hover:underline">สำนักงานส่งเสริมการเรียนรู้จังหวัดอ่างทอง</a></span>
            <span class="block text-xs text-gray-500 sm:text-center dark:text-gray-400"><a href="https://www.facebook.com/nanthchir.mapijarn" class="hover:underline">พัฒนาระบบโดย นายนนทชัย มาพิจารณ์ ครู สกร.อำเภอโพธิ์ทอง</a></span>
        </div>
    </footer>
</html>
