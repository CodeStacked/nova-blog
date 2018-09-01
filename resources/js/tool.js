Nova.booting((Vue, router) => {
    router.addRoutes([
        {
            name: 'nova-tool',
            path: '/nova-tool',
            component: require('./components/Tool'),
        },
    ])
})
