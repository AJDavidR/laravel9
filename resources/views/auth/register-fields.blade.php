<div class="space-y-4">
    <label class="flex flex-col">
        <span class="font-serif text-slate-600 dark:text-slate-400">
            Name
        </span>
        <input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" 
        name="name" 
        type="text" 
        autofocus="autofocus"
        value="{{ old('name')}}">
        @error('name')
        <small class="font-bold text-red-500/80">{{ $message }}</small>
        @enderror
    </label>

    <label class="flex flex-col">
        <span class="font-serif text-slate-600 dark:text-slate-400">
            Email
        </span>
        <input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" 
        name="email" 
        type="email" 
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

    <label class="flex flex-col">
        <span class="font-serif text-slate-600 dark:text-slate-400">
            Password Confirmation
        </span>
        <input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" 
        name="password_confirmation" 
        type="password"
        >
        @error('password')
        <small class="font-bold text-red-500/80">{{ $message }}</small>
        @enderror
    </label>
</div>  