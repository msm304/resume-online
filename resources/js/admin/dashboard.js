// Sidebar toggle (mobile)
const sidebar = document.getElementById("sidebar");
const menuBtn = document.getElementById("menuBtn");
menuBtn?.addEventListener("click", () => {
  sidebar.classList.toggle("hidden");
});

// Charts
new Chart(document.getElementById("usersChart"), {
  type: "line",
  data: {
    labels: ["فروردین", "اردیبهشت", "خرداد", "تیر", "مرداد"],
    datasets: [
      {
        label: "کاربران",
        data: [10, 25, 40, 60, 80],
        borderColor: "#3b82f6",
        backgroundColor: "rgba(59,130,246,0.3)",
        fill: true,
        tension: 0.4,
      },
    ],
  },
  options: {
    responsive: true,
    plugins: { legend: { display: false } },
    scales: {
      x: { ticks: { color: "#ccc" } },
      y: { ticks: { color: "#ccc" } },
    },
  },
});

new Chart(document.getElementById("projectsChart"), {
  type: "bar",
  data: {
    labels: ["پروژه ۱", "پروژه ۲", "پروژه ۳", "پروژه ۴"],
    datasets: [
      {
        label: "فعالیت",
        data: [12, 19, 8, 15],
        backgroundColor: "#10b981",
      },
    ],
  },
  options: {
    responsive: true,
    plugins: { legend: { display: false } },
    scales: {
      x: { ticks: { color: "#ccc" } },
      y: { ticks: { color: "#ccc" } },
    },
  },
});

