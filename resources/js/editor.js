import { Editor } from '@tiptap/core'
import StarterKit from '@tiptap/starter-kit'

window.setupEditor = function() {
    return {
        editor: null,
        init(element) {
            this.editor = new Editor({
                element: element,
                extensions: [
                    StarterKit
                ],
                content: this.content,
                onUpdate: ({ editor }) => {
                    this.content = editor.getHTML()
                }
            })
        },
    }
}