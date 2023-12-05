<x-layout title="Bidify Login">

    <div class="flex justify-center w-full border-b-2 border-gray3">
        <a href="/" class="py-13">
            <img src="../../../public/bidify_logo/logo_text_blue.svg" class="max-w-[5rem] py-3"></img>
        </a>
    </div>
    <div class="flex justify-center items-center h-screen">
        <div class="bg-[#fff] flex flex-col px-[43px] py-[50px] w-[503px] max-w-lg  rounded-[40px]">
            <form>
                @csrf
                <div class="flex flex-col mb-[36px]">
                    <h3 class="font-body text-main_03 "> Login</h3>
                    <p class="font-body text-detail">
                        New to Bidify?
                        <a class="text-primary-blue" href="">
                            Register
                        </a>
                    </p>
                </div>
                @if ($errors->any())
                    <p class="text-red-500 text-sm">{{ $errors->first() }}</p>
                @endif
                <div>
                    <div class="flex flex-col flex-start gap-[1px] my-[15px]">
                        <label class="font-body text-body text-primary-blue">
                            Email
                        </label>
                        <input type="email"
                            class="pl-4 font-body text-body bg-gray3 border border-gray-3 h-[39px] rounded-[10px] bg-white " />
                    </div>
                    <div class=" flex flex-col flex-start gap-[1px] my-[15px] ">
                        <label class=" font-body text-body text-primary-blue">
                            Password
                        </label>
                        <input type="password"
                            class="pl-4 font-body text-body bg-gray3 border border-gray-3 h-[39px] rounded-[10px] bg-white" />
                    </div>
                </div>
                <div class="flex flex-col justify-around gap-2 my-[36px]">
                    <button
                        class="flex justify-center items-center h-[52px] disabled:opacity-75 font-body text-body text-white bg-primary-blue py-2  hover:bg-hover-blue rounded-lg duration-100">
                        Login
                    </button>
                </div>
                <div class="flex justify-center items-center gap-2 my-[36px]">
                    <div class="w-full border-b border-gray-400"></div>
                    <p class="flex flex-start font-body text-smallest text-gray-3">
                        Or
                    </p>
                    <div class="w-full border-b border-gray-400"></div>
                </div>
                <div class="flex flex-col flex-start gap-2 my-4">
                    <a href="/auth/google/redirect"
                        class="flex justify-center items-center h-[52px] font-body text-body text-black border-[1px] border-primary-blue rounded-[10px] bg-white">
                        <img src="assets/google.svg" class="fill-current w-[30px] h-[30px] mr-2 "></img>
                        <span class="font-body text-detail">
                            Sign In with Google
                        </span>
                    </a>
                    <a href="/auth/github/redirect"
                        class="flex justify-center items-center h-[52px] font-body text-body text-black border-[1px] border-primary-blue rounded-[10px] bg-white">
                        <img src="assets/github.svg" class="fill-current w-[30px] h-[30px] mr-2 "></img>
                        <span class="font-body text-detail">
                            Sign In with GitHub
                        </span>
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-layout>
