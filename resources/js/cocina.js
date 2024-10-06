//document.addEventListener('DOMContentLoaded', ()=>{
document.addEventListener('alpine:init', () => {
    Alpine.data('kitchen', () => ({

        init() {
            setInterval(() => {
                axios.get('/orders/kitchen')
                    .then(response => {
                        this.pendingOrders = response.data;
                    });
            }, 3000);
        },

        pendingOrders: {!! $pendingOrders->toJson() !!},
        preparingOrders: {!! $preparingOrders->toJson() !!},
        completedOrders: {!! $completedOrders->toJson() !!},
        orderStatus: {!! json_encode($orderStatus) !!},

        updateOrderToPreparing(order) {
            this.updateStatusOrder(order, {status: this.orderStatus.Preparing})
                .then(response => {
                     let index = this.pendingOrders.findIndex(pendingOrder => pendingOrder.id == order.id);
                    this.pendingOrders.splice(index, 1);
                    this.preparingOrders.push(response.data);
                });
        },

        updateOrderToCompleted(order) {
            this.updateStatusOrder(order, {status: this.orderStatus.Completed})
                .then(response => {
                    let index = this.preparingOrders.findIndex(preparingOrder => preparingOrder.id == order.id);
                    this.preparingOrders.splice(index, 1);
                    this.completedOrders.push(response.data);
                });
        },

        updateStatusOrder(order, data) {
            return axios.put('/update-orders-status/' + order.id, data)
        }
    }));

//})
