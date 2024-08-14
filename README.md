
## Use tailwind for design
# Use bun as tailwind package manager
//install tailwind
>> bun install tailwindcss postcss autoprefixer
>> bunx tailwindcss init -p
>> replace the content array in tailwind.config.js

add the below code in app.css
@tailwind base;
@tailwind components;
@tailwind utilities;