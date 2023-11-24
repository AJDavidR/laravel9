<div class="space-y-4">
        <label class="flex flex-col">
        <span class="font-serif text-slate-600 dark:text-slate-400">
            Email
        </span>
        <input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" 
        name="email" 
        type="email" 
        autofocus="autofocus"
        value="{{ old('email')}}">
        @error('email')
        <small class="font-bold text-red-500/80">{{ $message }}</small>
        @enderror
    </label>

    <label class="flex flex-col">
        <span class="font-serif text-slate-600 dark:text-slate-400">
            Password
        </span>
        <input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" 
        name="password" 
        type="password"
        >
        @error('password')
        <small class="font-bold text-red-500/80">{{ $message }}</small>
        @enderror
    </label>

    <label class="flex items-center">
        <input class="border rounded dark:bg-slate-900 dark:border-slate-800 border-slate-300 dark:border-slate-700 text-sky-700 focus:border-sky-300 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50" 
        name="remember" 
        type="checkbox"
        >
        <span class="cursor-pointer ml-2 font-serif text-slate-600 dark:text-slate-400">
            Remember me
        </span>
    </label>
</div>  