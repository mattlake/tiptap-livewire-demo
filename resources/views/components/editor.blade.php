<div
    x-data="{content: @entangle($attributes->wire('model')),...setupEditor()}"
    x-init="() => init($refs.editor)"
    wire:ignore
    {{ $attributes->whereDoesntStartWith('wire:model') }}>

    <!-- The Controls -->
    <template x-if="editor">
        <div class="mb-2 flex gap-2">
            <button class="flex items-center px-3 py-1 bg-gray-200 rounded-lg shadow-xs cursor-pointer hover:bg-gray-500 hover:text-gray-100" @click="editor.chain().toggleBold().focus().run()">Bold</button>
            <button class="flex items-center px-3 py-1 bg-gray-200 rounded-lg shadow-xs cursor-pointer hover:bg-gray-500 hover:text-gray-100" @click="editor.chain().focus().toggleItalic().run()">italic</button>
            <button class="flex items-center px-3 py-1 bg-gray-200 rounded-lg shadow-xs cursor-pointer hover:bg-gray-500 hover:text-gray-100" @click="editor.chain().focus().setParagraph().run()"> paragraph</button>
            <button class="flex items-center px-3 py-1 bg-gray-200 rounded-lg shadow-xs cursor-pointer hover:bg-gray-500 hover:text-gray-100" @click="editor.chain().focus().toggleHeading({ level: 1 }).run()">h1</button>
            <button class="flex items-center px-3 py-1 bg-gray-200 rounded-lg shadow-xs cursor-pointer hover:bg-gray-500 hover:text-gray-100" @click="editor.chain().focus().toggleHeading({ level: 2 }).run()">h2</button>
            <button class="flex items-center px-3 py-1 bg-gray-200 rounded-lg shadow-xs cursor-pointer hover:bg-gray-500 hover:text-gray-100" @click="editor.chain().focus().toggleHeading({ level: 3 }).run()">h3</button>
            <button class="flex items-center px-3 py-1 bg-gray-200 rounded-lg shadow-xs cursor-pointer hover:bg-gray-500 hover:text-gray-100" @click="editor.chain().focus().toggleHeading({ level: 4 }).run()">h4</button>
            <button class="flex items-center px-3 py-1 bg-gray-200 rounded-lg shadow-xs cursor-pointer hover:bg-gray-500 hover:text-gray-100" @click="editor.chain().focus().toggleHeading({ level: 5 }).run()">h5</button>
            <button class="flex items-center px-3 py-1 bg-gray-200 rounded-lg shadow-xs cursor-pointer hover:bg-gray-500 hover:text-gray-100" @click="editor.chain().focus().toggleHeading({ level: 6 }).run()">h6</button>
            <button class="flex items-center px-3 py-1 bg-gray-200 rounded-lg shadow-xs cursor-pointer hover:bg-gray-500 hover:text-gray-100" @click="editor.chain().focus().toggleBulletList().run()">bullet list</button>
            <button class="flex items-center px-3 py-1 bg-gray-200 rounded-lg shadow-xs cursor-pointer hover:bg-gray-500 hover:text-gray-100" @click="editor.chain().focus().toggleOrderedList().run()">ordered list</button>
            <button class="flex items-center px-3 py-1 bg-gray-200 rounded-lg shadow-xs cursor-pointer hover:bg-gray-500 hover:text-gray-100" @click="editor.chain().focus().toggleCodeBlock().run()">code block</button>
            <button class="flex items-center px-3 py-1 bg-gray-200 rounded-lg shadow-xs cursor-pointer hover:bg-gray-500 hover:text-gray-100" @click="editor.chain().focus().toggleBlockquote().run()">blockquote</button>
            <button class="flex items-center px-3 py-1 bg-gray-200 rounded-lg shadow-xs cursor-pointer hover:bg-gray-500 hover:text-gray-100" @click="editor.chain().focus().undo().run()">undo</button>
            <button class="flex items-center px-3 py-1 bg-gray-200 rounded-lg shadow-xs cursor-pointer hover:bg-gray-500 hover:text-gray-100" @click="editor.chain().focus().redo().run()">redo</button>
        </div>
    </template>

    <!-- The editor -->
    <div x-ref="editor" class="prose py-2 px-3 rounded-lg border-2 border-gray-300 mt-1 focus:outline-none focus:ring-2 focus:ring-gray-600 focus:border-transparent"></div>
</div>