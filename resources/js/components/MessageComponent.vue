<template>
    <div class="">
        <li class="list-group-item" :class="className"><slot></slot>
            <small id="time" class="badge badge-danger">{{ time}}</small>
        </li>
        <small class="badge float-right" :class="badgeClass">{{ user }}</small>
    </div>
</template>

<script>
    export default {
        props: [
            'color',
            'user',
            'time'
        ],
        computed:{
            className(){
                return 'list-group-item-'+this.color;
            },
            badgeClass(){
                return 'badge-'+this.color;
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<style>
   #time{
       font-size: 9px;
       color: white;
   }
</style>
