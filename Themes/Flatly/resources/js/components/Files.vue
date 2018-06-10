<template>
    <div>
        <h2>Pliki do pobrania</h2>
        <p>Poniżej znajdują się materiały udostępnione dla Twojego konta.</p>
        <table class="table files table-hover">
            <colgroup>
                <col width="5%"/>
            </colgroup>
            <thead>
            <tr>
                <th></th>
                <th>Nazwa</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="dir of directories" class="dir" @click="loadDirectory(dir.path)">
                <td><i class="icon-folder-icon" aria-hidden="true"></i></td>
                <td>{{dir.name}}</td>
            </tr>
            <tr v-for="file of files">
                <td></td>
                <td>
                    <a v-bind:href="getDownloadLink(file)">
                        {{file.name}}
                    </a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    import axios from 'axios';

    export default {
        data() {
            return {
                location: '',
                files: [],
                directories: [],
            }
        },
        methods: {
            loadDirectory(directory) {
                this.location = directory;
                axios.get('/instrukcje_files', {
                    params: {
                        location: directory
                    }
                }).then((response) => {
                    this.files = response.data.files;
                    this.directories = response.data.directories;
                });
            },
            getDownloadLink(file) {
                return '/instrukcje_download?' + jQuery.param( {file: file});
            }
        },
        mounted() {
            this.loadDirectory(this.location);
        }
    }
</script>
