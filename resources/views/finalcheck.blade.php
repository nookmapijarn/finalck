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

    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
          <a href="#" class="flex items-center">
              <img src="{{asset('storage/logo-app.jpg');}}" class="h-8 mr-3 rounded-full" alt="สกร.จังหวัดอ่างทอง" />
              <span class="self-center text-xl font-semibold whitespace-nowrap">สกร.จังหวัดอ่างทอง</span>
          </a>
          <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
              <span class="sr-only">Open main menu</span>
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
              </svg>
          </button>
          <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
              <li>
                <a href="{{ url('addfinalstudent') }}" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">จัดการ(+)</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>      
    <body class="">
        <div class="relative pb-4">
            <main class="px-4 mx-auto mt-10 max-w-7xl sm:mt-14">
              <div class="flex justify-center">
                <img class="w-20 h-20 rounded-full" src="{{asset('storage/logo-app.jpg');}}" alt="Rounded avatar">
            </div>
              <div class="text-center"> 
                  <h1 class="font-display mt-4 text-md md:text-4xl tracking-tight font-extrabold text-gray-900">
                    ค้นหาและตรวจสอบผู้จบหลักสูตร
                  </h1>
                <p class="max-w-md mx-auto mt-3 text-xs text-gray-500 sm:text-xs md:mt-5 md:text-sm md:max-w-3xl">
                  " ใช้สำหรับการค้นหาและตรวจสอบสถาณะผู้เรียน เช่น การจบหลักสูตร ศึกษาต่อที่อื่น หมดสภาพ พ้นสภาพ ลาออก และอื่นๆ เฉพาะหลักสูตรการศึกษานอกระบบระดับการศึกษาขั้นพื้นฐาน พุทธศักราช 2551 สถานศึกษาในสังกัดของสำนักงานส่งเสริมการเรียนรู้จังหวัดอ่างทอง "
                </p>
                <div class="relative max-w-3xl px-4 mx-auto mt-10 sm:px-6">

                    <form action="{{ route('finalcheck.search') }}" method="POST">   
                        @csrf
                        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                </svg>
                            </div>
                            <input type="search" name="search" autofocus maxlength="25" id="default-search" value="{{$old}}" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-full bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="เลขบัตรประชาชน 13 หลัก" required>
                            <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-4 py-2">ค้นหา</button>
                        </div>
                    </form>
                </div>
              </div>
              <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4">
                @if($old!=='')
                <table class="w-full text-sm text-left text-gray-400">
                    <thead class="text-sm text-gray-700 uppercase bg-gray-200">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                ที่
                            </th>
                            <th scope="col" class="px-6 py-3">
                                รหัสนักศึกษา
                            </th>
                            <th scope="col" class="px-6 py-3">
                                คำนำหน้า
                            </th>
                            <th scope="col" class="px-6 py-3">
                                ชื่อ
                            </th>
                            <th scope="col" class="px-6 py-3">
                                นามสกุล
                            </th>
                            <th scope="col" class="px-6 py-3">
                                สถานะปัจุบัน
                            </th>
                            <th scope="col" class="px-6 py-3">
                                ระดับชั้น
                            </th>
                            <th scope="col" class="px-6 py-3">
                                ภาคเรียน
                            </th>
                            <th scope="col" class="px-6 py-3">
                                เลขที่วุฒิ
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($value as $v)
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <td scope="row" class="px-6 py-3">
                                {{$loop->iteration}}
                            </td>
                            <td scope="row" class="px-6 py-3">
                                {{$v->ID}}
                            </td>
                            <td scope="row" class="px-6 py-3">
                                {{$v->PRENAME}}
                            </td>
                            <td scope="row" class="px-6 py-3">
                                {{$v->NAME}}
                            </td>
                            <td scope="row" class="px-6 py-3">
                                {{$v->SURNAME}}
                            </td>
                            <td scope="row" class="px-6 py-3">
                                @if($v->FIN_CAUSE==1) <span class="text-green-400">จบหลักสูตร</span> @endif 
                                @if($v->FIN_CAUSE==2) ลาออก @endif 
                                @if($v->FIN_CAUSE==3) <span class="text-red-400">หมดสภาพ</span> @endif 
                                @if($v->FIN_CAUSE==4) พ้นสภาพ @endif 
                                @if($v->FIN_CAUSE==5) ศึกษาต่อที่อื่น @endif 
                                @if($v->FIN_CAUSE==6) ศึกษาเพิ่งหลังจบ @endif 
                                @if($v->FIN_CAUSE==7) จบตกหล่น @endif 
                                @if($v->FIN_CAUSE==8) อื่นๆ @endif 
                                @if($v->FIN_CAUSE==9) จบอยู่ระหว่างตรวจสอบวุฒิ @endif 
                                @if($v->FIN_CAUSE=='') ยังไม่ระบุ @endif
                            </td>
                            <td scope="row" class="px-6 py-3">
                                @if($v->LAVEL==1) <span class=""> ประถมศึกษา</span> @endif 
                                @if($v->LAVEL==2) <span class=""> มัธยมศึกษาต้น</span> @endif 
                                @if($v->LAVEL==3) <span class=""> มัธยมศึกษาปลาย</span> @endif 
                            </td>
                            <td scope="row" class="px-6 py-3">
                                {{$v->FIN_SEM}}
                                @if($v->FIN_SEM=='') - @endif
                            </td>
                            <td scope="row" class="px-6 py-3">
                                {{$v->TRNRUN}}
                                @if($v->TRNRUN=='') - @endif
                            </td>
                        </tr>
                        @empty
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <td colspan="9" class="px-6 py-3">
                                <div class="text-center p-5">
                                    <div class="p-4 mb-4 text-sm text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300" role="alert">
                                        <span class="font-medium">ไม่พบข้อมูล !</span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                @endif
            </div>
            </main>
          </div>        
    </body>
    <section class="min-pt-10">
    <footer class="bg-white rounded-lg w-full">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            {{-- <div class="sm:flex sm:items-center sm:justify-between">
                <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0">
                    <img src="{{asset('storage/logo-app.jpg');}}" class="h-8 mr-3 rounded-full" alt="" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">สกร.อำเภอโพธิ์ทอง</span>
                </a>
                <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6 ">Licensing</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Contact</a>
                    </li>
                </ul>
            </div> --}}
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-xs text-gray-500 sm:text-center dark:text-gray-400"><a href="#" class="hover:underline">สำนักงานส่งเสริมการเรียนรู้จังหวัดอ่างทอง</a></span>
            <span class="block text-xs text-gray-500 sm:text-center dark:text-gray-400"><a href="https://www.facebook.com/nanthchir.mapijarn" class="hover:underline">พัฒนาระบบโดย นายนนทชัย มาพิจารณ์ ครู สกร.อำเภอโพธิ์ทอง</a></span>
        </div>
    </footer>
    </section>
</html>
