 @props(['name'])

 <span class="text-red-600 text-sm/6 font-semibold mt-1">
     @error($name)
         {{ $message }}
     @enderror
 </span>
