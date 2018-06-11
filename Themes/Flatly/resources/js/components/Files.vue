<template>
    <div>
        <h2>Pliki do pobrania</h2>
        <p>Poniżej znajdują się materiały udostępnione dla Twojego konta.</p>
        <table class="table files table-hover">
            <colgroup>
                <col width="3%"/>
            </colgroup>
            <thead>
            <tr>
                <th></th>
                <th>Nazwa</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="dir of directories" class="dir" @click="loadDirectory(dir.path)">
                <td>
                    <svg x="0px" y="0px" height="24px" width="24px" focusable="false" viewBox="0 0 24 24" fill="#8f8f8f"><g><path d="M10 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2h-8l-2-2z"></path><path d="M0 0h24v24H0z" fill="none"></path></g></svg>
                </td>
                <td><a href="#"> {{dir.name}}</a></td>
            </tr>
            <tr v-for="file of files">
                <td>
                </td>
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
                axios.get('/materialy_files', {
                    params: {
                        location: directory
                    }
                }).then((response) => {
                    this.files = response.data.files;
                    this.directories = response.data.directories;
                });
            },
            getDownloadLink(file) {
                return '/materialy_download?' + jQuery.param( {file: file});
            }
        },
        mounted() {
            this.loadDirectory(this.location);
        }
    }
</script>
