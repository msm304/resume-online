// Modal کنترل
const addSkillBtn = document.getElementById("addSkillBtn");
const addSkillModal = document.getElementById("addSkillModal");
const closeModalBtn = document.getElementById("closeModalBtn");
const cancelModalBtn = document.getElementById("cancelModalBtn");

// باز کردن مودال
addSkillBtn?.addEventListener("click", () => {
  addSkillModal.classList.remove("hidden");
});

// بستن مودال
function closeModal() {
  addSkillModal.classList.add("hidden");
}

closeModalBtn?.addEventListener("click", closeModal);
cancelModalBtn?.addEventListener("click", closeModal);

// بستن با کلیک بیرون
addSkillModal?.addEventListener("click", (e) => {
  if (e.target === addSkillModal) closeModal();
});


document.addEventListener("DOMContentLoaded", () => {
    const editModal = document.getElementById("editSkillModal");
    const closeEditBtn = document.getElementById("closeEditModalBtn");
    const cancelEditBtn = document.getElementById("cancelEditModalBtn");
    const editForm = document.getElementById("editSkillForm");

    // گرفتن دکمه‌های ویرایش
    const editButtons = document.querySelectorAll(".editSkillBtn");

    editButtons.forEach(btn => {
        btn.addEventListener("click", () => {
            const id = btn.getAttribute("data-id");
            const name = btn.getAttribute("data-name");
            const desc = btn.getAttribute("data-description");

            // پر کردن فرم مودال
            document.getElementById("editSkillId").value = id;
            document.getElementById("editSkillName").value = name;
            document.getElementById("editSkillDescription").value = desc;

            // ست کردن اکشن فرم (به URL درست)
            editForm.action = `http://localhost:8000/dashboard/${id}/update`;

            // نمایش مودال
            editModal.classList.remove("hidden");
        });
    });

    // بستن مودال
    [closeEditBtn, cancelEditBtn].forEach(el => {
        el.addEventListener("click", () => {
            editModal.classList.add("hidden");
        });
    });
});
document.getElementById("editSkillForm").action = `/dashboard/skills/${id}`;

