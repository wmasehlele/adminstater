<style>
    table > tbody > tr:hover {
        background-color: #ccc;
        cursor: pointer;
    }
</style>
<template>
    <div>
        <form>
            <div class="form-group row">
                <div class="col-12 col-md-3">
                    <label for="exampleInputEmail1">Search By:</label>
                    <input type="text" class="form-control" id="staticEmail" value="" placeholder="Name / Email / cell">
                </div>
            </div>
        </form>
        <hr>
        <table class="table table-bordered table-sm">
            <thead class="thead-light">
                <tr>
                <th scope="col">Client Number</th>
                <th scope="col">Name</th>
                <th scope="col">Surname</th>
                <th scope="col">Cellphone</th>
                <th scope="col">Email Address</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@07548596584</td>
                    <td>someone.somebody@gmail.com</td>
                </tr>
                <tr>
                    <th>2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@07548596584</td>
                    <td>someone.somebody@gmail.com</td>
                </tr>
                <tr>
                    <th>3</th>
                    <td>Larry</td>
                    <td>Thornton</td>
                    <td>@07548596584</td>
                    <td>someone.somebody@gmail.com</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
