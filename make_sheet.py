import os
from PIL import Image, ImageDraw

folder = "new images"
images = [f for f in os.listdir(folder) if f.endswith(('.jpeg', '.jpg', '.png'))]
images.sort()

thumb_width = 300
thumb_height = 200
cols = 5
rows = (len(images) + cols - 1) // cols

contact_sheet = Image.new('RGB', (cols * thumb_width, rows * thumb_height), (255, 255, 255))
draw = ImageDraw.Draw(contact_sheet)

for i, img_name in enumerate(images):
    img_path = os.path.join(folder, img_name)
    try:
        img = Image.open(img_path)
        img.thumbnail((thumb_width, thumb_height))
        x = (i % cols) * thumb_width + (thumb_width - img.width) // 2
        y = (i // cols) * thumb_height + (thumb_height - img.height) // 2
        contact_sheet.paste(img, (x, y))
        text_x = (i % cols) * thumb_width + 10
        text_y = (i // cols) * thumb_height + 10
        draw.text((text_x, text_y), img_name, fill=(255, 0, 0))
    except Exception as e:
        print(f"Error processing {img_name}: {e}")

contact_sheet.save("contact_sheet.jpg")
print("Contact sheet created at contact_sheet.jpg")
