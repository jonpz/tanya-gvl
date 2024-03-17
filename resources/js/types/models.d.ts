declare namespace Model {
    export type Page = {
        title: string
        meta_title?: string
        meta_description?: string
        blocks?: Array<Block> | null
    }

    export type Block = {
        editor_name: string
        position: number
        type: string
        content: {} | null
    }
}
