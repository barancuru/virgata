<template>
  <!-- Node listesi ve formu -->
</template>

<script>
export default {
  data() {
    return {
      nodes: [],
      // Diğer data özellikleri
    };
  },
  methods: {
    fetchNodes() {
      axios.get('/api/nodes')
        .then(response => {
          this.nodes = response.data;
        });
    },
    createNode(newNodeData) {
      axios.post('/api/nodes', newNodeData)
        .then(response => {
          // Node başarıyla oluşturuldu, listeyi güncelle
          this.nodes.push(response.data);
        })
        .catch(error => {
          // Hata yönetimi
          console.error("Node oluşturulamadı:", error);
        });
    },
    // Diğer metodlar buraya eklenebilir
  },
  mounted() {
    this.fetchNodes();
  }
}
</script>
