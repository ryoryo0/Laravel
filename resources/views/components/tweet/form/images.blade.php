<div x-data="inputFormHandler()" class="my-2">
    <template x-for="(field, i) in fields" :key="i">
        <div class="w-full flex my-2">
            <label :for="field.id" class="border border-gray-300 rounded-md p-2 w-full bg-white cursor-pointer">
                <input type="file" accept="image/*" class="sr-only" :id="field.id" name="images[]" @change="field[i].file = $event.target.files[0]">
                <span x-text="field.file ? field.file.name : '画像を選択'" class="text-gray-700">
                </span>
            </label>
            <button type="reset" @click="removeField(i)" class="p-2">
                <p>
                    ×
                </p>
            </button>
        </div>
    </template>
    <template x-if="field.length < 4">
        <button type="button" @click="addField()" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-500 hover:bg-gray-600">
            <span>
                画像を追加
            </span>
        </button>
    </template>
</div>
<script>
    function inputFormHandler(){
        return{
            fields: [],
            addField(){
                const i = this.fields.length;
                this.fields.push({
                    file: '',
                    id: `input-image-${i}`
                });
            },
            removeField(index){
                this.fields.splice(index, 1);
            }
        }
    }
</script>

