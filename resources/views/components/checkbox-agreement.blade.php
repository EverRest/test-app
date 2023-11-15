<label>
    <input
        name="agreement"
        type="checkbox" {!! $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm']) !!}>
    <span class="font-medium text-sm text-gray-700 dark:text-gray-300">I agree with the
        <a class="underline font-medium text-sm text-gray-900 dark:text-gray-500"
            href="/terms-and-conditions">terms and conditions</a>.
    </span>
</label>
