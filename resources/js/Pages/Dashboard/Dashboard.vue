<script setup>
import {ref} from 'vue';

// Sample user data
const users = ref([
    {id: 1, name: 'John Doe', email: 'john.doe@example.com', role: 'Admin'},
    {id: 2, name: 'Jane Smith', email: 'jane.smith@example.com', role: 'User'},
    {id: 3, name: 'Alice Johnson', email: 'alice.johnson@example.com', role: 'Moderator'},
    {id: 4, name: 'Bob Brown', email: 'bob.brown@example.com', role: 'User'},
]);
</script>

<template>
    <div class="dashboard">
        <header class="header">
            <h1 class="title">Dashboard</h1>
        </header>

        <main class="main-content">
            <section class="user-table">
                <h2 class="section-title">User Management</h2>
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="user in users" :key="user.id">
                        <td>{{ user.id }}</td>
                        <td>{{ user.name }}</td>
                        <td>{{ user.email }}</td>
                        <td>{{ user.role }}</td>
                    </tr>
                    </tbody>
                </table>
            </section>
        </main>
    </div>
</template>

<style scoped>
/* General Styles */
.dashboard {
    font-family: Arial, sans-serif;
    padding: 20px;
    background-color: #f9f9f9;
}

/* Header */
.header {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
}

.title {
    margin: 0;
}

/* Main Content */
.main-content {
    margin-top: 20px;
}

.section-title {
    margin-bottom: 10px;
    font-size: 18px;
    font-weight: bold;
}

/* Table Styles */
.table {
    width: 100%;
    border-collapse: collapse;
    background: white;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.table th,
.table td {
    padding: 10px;
    text-align: left;
    border: 1px solid #ddd;
}

.table th {
    background-color: #4CAF50;
    color: white;
}

.table tr:nth-child(even) {
    background-color: #f2f2f2;
}

.table tr:hover {
    background-color: #f1f1f1;
}
</style>
