document.addEventListener("DOMContentLoaded", function() {
    const pilihanBangun = document.getElementById("bangun");
    const divInputFields = document.getElementById("input-fields");

    function perbaruiForm() {
        const pilihan = pilihanBangun.value;
        tampilkanGambar();
        divInputFields.innerHTML = "";
        
        const fields = {
            "Kubus": [
                { id: "sisi", label: "Sisi", type: "number" }
            ],
            "Balok": [
                { id: "panjang", label: "Panjang", type: "number" },
                { id: "lebar", label: "Lebar", type: "number" },
                { id: "tinggi", label: "Tinggi", type: "number" }
            ],
            "Kerucut": [
                { id: "jari", label: "Jari-jari", type: "number" },
                { id: "tinggi", label: "Tinggi", type: "number" }
            ],
            "Bola": [
                { id: "jari", label: "Jari-jari", type: "number" }
            ],
            "Prisma": [
                { id: "alas", label: "Alas Segitiga", type: "number" },
                { id: "tinggi_alas", label: "Tinggi Alas Segitiga", type: "number" },
                { id: "tinggi_segitiga", label: "Tinggi Prisma", type: "number" }
            ],
            "Tabung": [
                { id: "jari", label: "Jari-jari", type: "number" },
                { id: "tinggi", label: "Tinggi", type: "number" }
            ],
            "Limas": [
                { id: "alas", label: "Alas Segitiga", type: "number" },
                { id: "tinggi_alas", label: "Tinggi Alas Segitiga", type: "number" },
                { id: "tinggi_segitiga", label: "Tinggi Limas", type: "number" }
            ],
            "Persegi": [
                { id: "sisi", label: "Sisi", type: "number" }
            ],
            "PersegiPanjang": [
                { id: "panjang", label: "Panjang", type: "number" },
                { id: "lebar", label: "Lebar", type: "number" }
            ],
            "Segitiga": [
                { id: "alas", label: "Alas", type: "number" },
                { id: "tinggi", label: "Tinggi", type: "number" }
            ],
            "JajarGenjang": [
                { id: "alas", label: "Alas", type: "number" },
                { id: "tinggi", label: "Tinggi", type: "number" },
                { id: "miring", label: "Sisi Miring", type: "number" }
            ],
            "Trapesium": [
                { id: "sisi_a", label: "Sisi a", type: "number" },
                { id: "sisi_b", label: "Sisi b", type: "number" },
                { id: "tinggi", label: "Tinggi", type: "number" },
                { id: "sisi_c", label: "Sisi Miring", type: "number" },
                { id: "sisi_d", label: "Sisi Miring", type: "number" }
            ],
            "BelahKetupat": [
                { id: "diagonal1", label: "Diagonal 1", type: "number" },
                { id: "diagonal2", label: "Diagonal 2", type: "number" },
                { id: "sisi", label: "Sisi", type: "number" }
            ],
            "Lingkaran": [
                { id: "jari", label: "Jari-jari", type: "number" }
            ]
        };

        if (fields[pilihan]) {
            fields[pilihan].forEach(field => {
                divInputFields.innerHTML += buatInputField(field.id, field.label, field.type);
            });
        }
    }

    function buatInputField(id, label, type) {
        return `
            <div class="form-group">
                <label for="${id}">${label}:</label>
                <input type="${type}" id="${id}" name="${id}" class="form-control" required>
            </div>
        `;
    }

    pilihanBangun.addEventListener("change", perbaruiForm);
    perbaruiForm(); 
});
